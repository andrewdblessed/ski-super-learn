(function() {
//   var cx = '005172588709921972888:fsuibenly4m';
//   var gcse = document.createElement('script');
//   gcse.type = 'text/javascript';
//   gcse.async = true;
//   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
//       '//cse.google.com/cse.js?cx=' + cx;
//   var s = document.getElementsByTagName('script')[0];
//   s.parentNode.insertBefore(gcse, s);
// })();
      //NOTE:// NEW note function
      // NOTE DELETE_FUN FOR DELETING NOTES
          function delete_fun(url, redirect, loadcom) {
                  $(".ski_loader").css("display", "block");
              // console.log('loading');
            var  durl = url;
            $.ajax({
            type: 'GET',
            url: durl,
            })
            .done(function(response) {
              $(".ajax_point").load(redirect);
              if (loadcom == 0) {
    console.log(null);
              }else{
                SnackBar.show({text:loadcom,
                  pos: 'top-center',
                  duration: '9000',});
              }
              // console.log('note deleted');
              $(".ski_loader").css("display", "none");
            })
            .fail(function(data) {
              SnackBar.show({
              text:"Opps there seems to be an error",
              pos: 'top-center',
              backgroundColor: '#e53935'
              });
              $(".ski_loader").css("display", "none");

                });
                console.log(redirect);
            };
});
