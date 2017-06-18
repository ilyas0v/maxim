<script src="{{asset('admin_assets/js/jquery.js')}}"></script>
<script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('.edit-duymesi').on('click',function(){
      $('.edit-duymesi').show();
      $(this).hide();
      $('.edit-slide-cancel').hide();
      $('.slide-yazisi').attr("disabled","disabled");
      $('.update-duymesi').hide();
      var id = $(this).attr("id");
      $('input.'+id).show();
      $('.edit-slide-cancel.'+id).show();
      $('textarea#'+id).removeAttr("disabled");
      $('textarea#'+id).focus();
    });

    $('.add-duymesi').on('click',function(){
      $(this).attr("disabled","disabled");
      $('#add-new-slide-textarea').focus();
      $('.add-new-slide').toggle();
    });

    $('#add-new-slide-cancel').on('click',function(){
      $('.add-new-slide').hide();
      $('.add-duymesi').removeAttr("disabled");
    });

    $('.edit-slide-cancel').on('click',function(){
      $(this).hide();
      $('.update-duymesi').hide();
      $('textarea.slide-yazisi').attr('disabled','disabled');
      $('.edit-duymesi').show();
    });
  });


  $('.reset-color').click(function(){
    $('input.fon-rengi').attr('value','#1bac91');
  })


</script>
