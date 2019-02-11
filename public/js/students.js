$(document).ready(function(){

	function Students() {
        var _this = this;


        this.myEvents = function(){

            $(".__delete").click(function(){
            	let id = $(this).data("id");
            	let _this=$(this)
            	
                console.log(id);

            	$.ajax({
                    url:'/students/delete',
                    method:'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        id:id
                    },
                    success:function(r){
                        if(r == "success"){
                        	_this.closest("tr").remove();
                        }
                    }
                })

            })

            $("#faculty").change(function(){
                let id = $(this).val()
                console.log(id);

                $.ajax({
                    url:'/students/getGroups',
                    method:'post',
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        id:id
                    },
                    success:function(r){
                        $("#group").empty()

                        let first_option = $("<option value='' disabled='' selected='' hidden=''>- - -</option>")
                        $("#group").append(first_option)

                        $.each(r, function( index, value ) {
                            let option = $("<option value='"+value["id"]+"'>"+value["name"]+"</option>")
                            $("#group").append(option)
                            // console.log( index + ": " + index );
                        });
                    }
                })
            })


            $(".__search").keyup(function(){
                let search = $(this).val()
                let where = $(this).data("where")

                $(".__search").val("")
                $(this).val(search)


                $.ajax({
                    url:'/students/getResultOfSearch',
                    method:'post',
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        search:search,
                        where:where
                    },
                    success:function(r){
                        $(".table tbody").empty()
                        console.log(r);


                        $.each(r, function( index, value ) {
                            let tr = $("<tr></tr>")
                            let name = $("<td>"+value['name']+"</td>")
                            let lastname = $("<td>"+value['lastname']+"</td>")
                            let phone = $("<td>"+value['phone']+"</td>")

                            let faculty = $("<td>"+value['group']['faculty']['name']+"</td>")
                            let group = $("<td>"+value['group']['name']+"</td>")

                            // <a class="d-block btn-long btn btn-primary" href="/students/edit/{{$student['id']}}" style="width: 100%">Edit</a>
                            // <button class="d-block btn btn-long btn-danger __delete" data-id="{{$student['id']}}" style="width: 100%">Delete</button>

                            let a_href = $("<a class='d-block btn-long btn btn-primary' href='/students/edit/"+value['id']+"' style='width: 100%'>Edit</a>")
                            let button = $("<button class='d-block btn btn-long btn-danger __delete' data-id='"+value['id']+"' style='width: 100%'>Delete</button>")


                            tr.append(name).append(lastname).append(phone).append(faculty).append(group).append(a_href).append(button)
                            $(".table tbody").append(tr)
                        });
                    }
                })
            })

        }();

        
    }

    var app = new Students();

})