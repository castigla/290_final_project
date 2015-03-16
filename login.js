function checkIfCorrect() {
  var httpRequest;
  if (window.XMLHttpRequest) {
    httpRequest = new XMLHttpRequest();
  }else if (window.ActiveXObject) {
    httpRequest = new ActiveXObject('Msxml12.XMLHTTP');
  }
  if (!XMLHttpRequest) {
    throw 'Unable to create the request';
  }

  var uname = document.getElementsByName('username')[0].value;
  var pass = document.getElementsByName('password')[0].value;

  var sendPost = new FormData();
  sendPost.append('username', uname);
  sendPost.append('password', pass);
  var url = 'http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/check_login.php';

  httpRequest.open('POST', url, true);
  httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState == 4 && httpRequest.status == 200) {
      var return_data = httpRequest.responseText;
      response(return_data);
    }
  };
  httpRequest.send(sendPost);
}

function response(return_data) {
  if (return_data === 'success') {
    login();

  } else {
    alert(return_data);
  }
}

function login() {
  document.getElementById('my-form').submit();
}

