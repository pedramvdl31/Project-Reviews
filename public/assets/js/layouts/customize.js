$(document).ready(function(){
	cust_layout.pageLoad();
	cust_layout.events();

});
cust_layout = {
	pageLoad: function() {


		


	},
	events: function() {
		$("#layout-option-select").change(function(){
			window.location.replace($( "#layout-option-select option:selected" ).val());
		});
		$('.back-to-home').click(function(){
			window.location = "/";
		});
        $(document).on('click','.login-btn',function(){
			$('#login-modal').modal('show');
        });
        $(document).on('click','.logout-btn',function(){
			$('#logout-modal').modal('show');
        });

	}
}
requestws = {

};

