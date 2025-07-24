<!-- Includes -->
<?php include("layouts/header.php")?>

<style>
    body {
      margin: 0;
      padding: 0;
      background: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .doc-container {
      width: 90vw;
      height: 80vh;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      background: white;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
</style>

<div class="container-cv mt-5">
    <div class="doc-container animate__animated animate__fadeInUp">
        <iframe src="https://drive.google.com/file/d/17TTI21joHabVXb81_crSZWEG1EY9hcTWMLAGb6St-BM/preview" allow="autoplay"></iframe>
    </div>
</div>
  
<!-- //NOTE - footer -->
<?php include("layouts/footer.php")?>
