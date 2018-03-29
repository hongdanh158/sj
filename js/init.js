(function($){
  $(function(){
    // Plugin initialization
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
    $('.sidenav').sidenav();
    // $('.button-collapse').sideNav({'edge': 'left'});
    $('.timepicker').timepicker({
      twelvehour: false,
    });
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.fixed-action-btn').floatingActionButton();
  }); // end of document ready
})(jQuery); // end of jQuery name space
