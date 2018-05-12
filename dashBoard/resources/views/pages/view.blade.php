<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>HI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Table Info</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <input type="text" class='form-control' id='search' name="search"></input>
            </div>
            <table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>name</th>
                  <th>biz_num</th>
                  <th>person_in_charge_name</th>
                  <th>agency_id</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $('#search').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
          type :'get',
          url :'{{URL::to('search')}}',
          data : {'search':$value},
          success: function(data){
            //$('tbody').html(data);
            console.log('error');
          }
        });
      })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
  </body>
</html>
