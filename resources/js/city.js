// セレクトボックスの連動
          import $ from 'jquery';
          let pref_val;
  
          // 親カテゴリのselect要素が変更になるとイベントが発生
          
          $('#prefList').change(function () {
             pref_val = $(this).val();
           
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: '/city/prefectures',
              type: 'POST',
              data: {"prefectures_val" : pref_val},
              datatype: 'json',
            })
            .done(function(data) {
              // 子カテゴリのoptionを一旦削除
              $('#cityList option').remove();
              // DBから受け取ったデータを子カテゴリのoptionにセット
              $.each(data, function(key, value) {
                $('#cityList').append($('<option>').text(value.name).attr('value', key));
              });

            })
            .fail(function() {
              console.log('失敗');
            }); 
            
          });
          
         
      
        