function openModal() {
      document.getElementById('modalLoad').style.display = 'block';
      document.getElementById('fade').style.display = 'block';
}

function closeModal() {
      document.getElementById('modalLoad').style.display = 'none';
      document.getElementById('fade').style.display = 'none';
}

function showSuccessAlert(info) {
    document.getElementById('myalert').style.display = 'block';    
    document.getElementById('myalert').style.backgroundColor = '#4CAF50';
    document.getElementById('info').innerText = info;
}

function showErrorAlert(info) {
    document.getElementById('myalert').style.display = 'block';    
    document.getElementById('myalert').style.backgroundColor = '#f44336';
    document.getElementById('info').innerText = info;
}

function showInfoAlert(info) {
    document.getElementById('myalert').style.display = 'block';    
    document.getElementById('myalert').style.backgroundColor = '#5c84e6';
    document.getElementById('info').innerText = info;
}