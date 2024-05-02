<!DOCTYPE html>
<html>
<head>
  <title>Comments Example</title>
  <style>
    /* Define the style for comments */
    .comment {
      background-color: #f2f2f2;
      padding: 10px;
      margin-bottom: 10px;
    }

    /* Define the style for the comment form */
    #commentForm {
      margin-bottom: 20px;
    }

    /* Define the style for the submit button */
    #commentForm input[type="submit"] {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    #commentForm input[type="submit"]:hover {
      background-color: #45a049; /* Darker Green */
    }
  </style>
  <script src="script.js"></script>
</head>
<body>
  <h1>Comments</h1>
  
  <!-- Comment form -->
  <form id="commentForm">
    <textarea id="commentText" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Submit Comment">
  </form>

  <h2>Comments List</h2>
  <!-- Comment list -->
  <ul id="commentsList"></ul>
</body>
</html>
