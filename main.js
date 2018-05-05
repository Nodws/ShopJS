(function ($) {
var data;

   $.getJSON(hd+'db.json', (d) => {
      data = d;
     
   });

let router = (hover) => {  
  $(hover).addClass('active');
  $(`section:not(${hover})`).removeClass('active');
  $('#side a, .selector').removeClass('active');
  $(`#side a[data-ver='${hover}'], .selector[data-ver='${hover}']`).addClass('active');
  $('html, body').animate({ scrollTop: 0 }, 500);
  // console.log(hover);
};

$('nav a').on('click', function (e) {
   e.preventDefault();
   let hover = $(this).attr('title'),
       url = $(this).attr('href'),
       item = {};
      for (const v of data) {
               if(v.title == hover)
                 { item = v; break;}
                 console.log(v.last);
            }
       console.log(item);
 hover = item.title ? item.title : 404;
       console.log(hover+' '+url);
 $('#title').text(hover);
       
  history.pushState(hover, null, url);
 //  router(hover);
});

$(window).on('popstate', function (e) {
    let hover = e.originalEvent.state;
    router(hover);
 
});

$('#close').on('click', function (e) {
  e.preventDefault();
  $('#infobox').removeClass('abrido');
  
});
  

}(jQuery));