<div class="popup" id="popup-1">
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">x</div>

    <h1>Login</h1>
    <form>
      <div class="input-field">
        <input placeholder="Email" name="loginEmail" type="email" class="validate" required />
      </div>
      <div class="input-field">
        <input placeholder="Password" name="loginPassword" type="password" class="validate" required />
      </div>
      <input type="submit" value="Login" class="second-button">
      <p id="noacc">Don't have an account? <a href="#">Create Now!</a></p>
    </form>
  </div>
</div>
<script>
  function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
  }
</script>