<!DOCTYPE html>
<html>
  <head>
    <title>Get Started - Riverside Rocks</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css"
    />
    <script
      src="https://kit.fontawesome.com/281a5c53f1.js"
      crossorigin="anonymous"
    ></script>
    <style>
      a {
        color: inherit;
      }
    </style>
  </head>
  <body>
    <center>
      <div
        class="siimple-jumbotron siimple-jumbotron--primary siimple-jumbotron--fluid"
      >
        <div class="siimple-jumbotron-title">Riverside Rocks API Docs</div>
        <div class="siimple-jumbotron-subtitle">
          Learn how to use the Riverside Rocks API
        </div>
      </div>
      <br />
      <div style="width:60%;">
        <div class="siimple-tip siimple-tip--primary">
          V1 Docs - Currently Updated
        </div>
      </div>
      <h2>
        Status - /v1/status
      </h2>
      <span class="siimple-tag siimple-tag--primary">GET</span>
      <h4>
        Returns
      </h4>
      <span class="siimple-tag siimple-tag--error">Live Example</span>
      <br>
      <br>
      <pre class="siimple-pre" style="width:60%">
        <?php
          echo file_get_contents("https://api.riverside.rocks/v1/status")
        ?>
      </pre>
      <i>Notes: The API can return either OK or BAD.</i>
      <h4>
        Example Code
      </h4>
      <pre class="siimple-pre" style="width:60%">
$api2 = json_decode(file_get_contents("https://api.riverside.rocks/v1/status"));
echo $api2[1];    
      </pre>
      <h2>
        Notes from Riverside Rocks - /v1/status
      </h2>
      <span class="siimple-tag siimple-tag--primary">GET</span>
            <h4>
        Returns
      </h4>
      <span class="siimple-tag siimple-tag--error">Live Example</span>
      <br>
      <br>
      <pre class="siimple-pre" style="width:60%">
        <?php
          echo file_get_contents("https://api.riverside.rocks/v1/note?id=1")
        ?>
      </pre>
      <i>Use the ID parameter to get a story.</i>
      <h4>
        Example Code
      </h4>
      <pre class="siimple-pre" style="width:60%">
$api2 = json_decode(file_get_contents("https://api.riverside.rocks/v1/note?id=1"));
echo $api2[1];    
      </pre>
    </center>
  </body>
</html>
