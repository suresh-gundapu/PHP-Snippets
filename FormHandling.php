<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Handling </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
  * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
  }

  .element {
    background-color: red;
    color: greenyellow;
    margin: auto;
  }

  .container {
    margin-top: 3rem;
    display: flex;
    justify-content: center;
    justify-items: center;
  }

  .error {
    color: red
  }
</style>

<body>
  <div class="element">
    <h1>
      Form Handling
    </h1>
  </div>
  <div class="container">
    <form id="userReg" method="post">
      <table border="0">
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" /> <span id="name"></span></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" /></td>
        </tr>
        <tr>
          <td>Mobile:</td>
          <td><input type="text" name="mobile" /></td>
        </tr>
        <tr>
          <td><input type="submit" /></td>
        </tr>
      </table>
    </form>
  </div>
  <?php

  print_r($_POST);
  ?>
  <script>
    $(function() {
      $("#userReg").validate({
        rules: {
          name: "required",
          email: "required",
          mobile: "required"
        },
        messages: {
          name: "name cant be blank"
        },
        errorPlacement: function(error, element) {
          error.insertAfter(element.parent());
        },
        // submitHandler:function(){
        //   var formData = new formData($("#userReg")[0]);
        //   $.ajax({
        //     url:"sadasd",
        //     data:formData,
        //     dataType:"JSON",
        //     success:function(data){

        //     }
        //   })
        // }
      });
    })
  </script>

</body>

</html>