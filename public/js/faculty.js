$(document).ready(function(){

	function Faculty() {
        var _this = this;


        this.myEvents = function(){

            $(".__delete").click(function(){
            	let id = $(this).data("id");
            	let _this=$(this)
            	
            	$.ajax({
                    url:'/faculty/delete',
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

        }();

        
    }

    var app = new Faculty();

})