<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

.speech-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 60px;
  height: 60px;
  border: none;
  border-radius: 50%;
  background-color: #2196F3;
  color: white;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.speech-button.active {
  color: red;
}

.speech-button:hover {
  background-color: #1976D2;
}

.speech-button:focus {
  outline: none;
}

.speech-button i {
  font-size: 28px;
}

</style>

</head>  

<button id="speech-button" class="speech-button" onclick="speechInput()">
      <i class="fas fa-microphone"></i>
</button>