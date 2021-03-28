!doctype html>
<title>Example</title>
<style>
  * {
    box-sizing: border-box;
  }
  .myForm {
    display: grid;
    grid-template-areas: 
      "customer taxi"
      "customer extras"
      "pickup dropoff"
      "instructions instructions"
      "submit submit";
  	grid-template-columns: auto auto;  
  	grid-template-rows: auto auto auto auto;
    grid-gap: .8em .5em;
    background: #eee;
    padding: 1.2em;
  }
  .myForm textarea {
    height: calc(100% - 1.5em);
    }
  .myForm button {
    background: gray;
    color: white;
    padding: 1em;
    }
  .myForm input:not([type=radio]):not([type=checkbox]), 
  .myForm textarea, 
  .myForm select {
   	width: 100%;
    border: 0;
    padding: 1em;
    margin: .5em 0;
  }
  .myForm label {
   display: block; 
  }
  fieldset {
    border: 0;
  }
  #customer {
    grid-area: customer;
  }
  #taxi {
    grid-area: taxi;
  }
  #extras {
    grid-area: extras;
  }
  #pickup {
    grid-area: pickup;
  }
  #dropoff {
    grid-area: dropoff;
  }
  #instructions {
    grid-area: instructions;
  }
  #submit {
    grid-area: submit;
  }
</style>
<form class="myForm">
  <fieldset id="customer">
    <label for="customer_name">Name </label>
    <input type="text" name="customer_name" id="customer_name" required>

    <label for="phone_number">Phone </label>
    <input type="tel" name="phone_number" id="phone_number">

    <label for="email_address">Email </label>
    <input type="email" name="email_address" id="email_address">
  </fieldset>
  <fieldset id="taxi">
    <legend>Which taxi do you require?</legend>
    <label> <input type="radio" name="taxi" id="taxi_car" required value="car"> Car </label>
    <label> <input type="radio" name="taxi" id="taxi_van" required value="van"> Van </label>
    <label> <input type="radio" name="taxi" id="taxi_tuk" required value="tuktuk"> Tuk Tuk </label>
  </fieldset>

  <fieldset id="extras">
    <legend>Extras</legend>
    <label> <input type="checkbox" name="extras" id="extras_baby" value="baby"> Baby Seat </label>
    <label> <input type="checkbox" name="extras" id="extras_wheel" value="wheelchair"> Wheelchair Access </label>
    <label> <input type="checkbox" name="extras" id="extras_tip" value="tip"> Stock Tip </label>
  </fieldset>
  
  <fieldset id="pickup">
    <label for="pickup_time">Pickup Date/Time</label>
    <input type="datetime-local" name="pickup_time" id="pickup_time" required>

    <label for="pickup_place">Pickup Place</label>
    <select name="pickup_place" id="pickup_place">
      <option value="" selected="selected">Select One</option>
      <option value="office" >Taxi Office</option>
      <option value="town_hall" >Town Hall</option>
      <option value="telepathy" >We'll Guess!</option>
    </select>
  </fieldset>

  <fieldset id="dropoff">
  <label for="dropoff_place">Dropoff Place</label>
    <input type="text" name="dropoff_place" id="dropoff_place" required list="destinations">

    <datalist id="destinations">
      <option value="Airport">
      <option value="Beach">
      <option value="Fred Flinstone's House">
    </datalist>
  </fieldset>
  
  <fieldset id="instructions">
    <label for="comments">Special Instructions</label>
    <textarea name="comments" id="comments" maxlength="500"></textarea>
  </fieldset>

  <button id="submit">Submit Booking</button>

</form>
