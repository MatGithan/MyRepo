<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
    <title>OpenShift Container Platform - Sample Application</title>
  
  </head>
  <body>
   
          <h1>Welcome to an OpenShift 3.3 - Sample Application ! (Checking GitHub) </h1>
          <p>The purpose of this application is to demonstrate several interesting features about OpenShift.!</p>
     
          <h2>Application Information</h2>
          <table border="1" bordercolor="green">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
      
          <h2>Application Example</h2>
          <p>
            <img src="bluehorse.jpg">
          </p>
       
   
  </body>
</html>
