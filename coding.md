## Coding
1.Basic framework (mainly based on HTML)
+ Main body and sections: Berry
  + Background (picture and layout)
  + Grouping every page's parts (information and pictures about the music) in different containers.
+ Header and footer: Will
  + Navigation part (logo and navigation bar)
  + Banner/Hero picture
  + contact information (email, phone and social links)
2. Search part (mainly based on PHP)
+ Search bar: Berry
  + What the form look like (layout)
  + Search request (GET/POST) to database (SLQ api)
+ Show search results: Will
  + Get the needed information (music name, creator and score) from database and place them in a table/grid
  + Show real-time search results function (AJAX)
3. Sign up and sign in (mainly based on PHP)
+ Sign up: Berry
  + What the signup form look like (layout)
  + Form request (GET/POST) to database (UQzone sql database)
  + Form fields validation (username, email format and password length, all value cannot be null)
+ Login: Will
  + What the login part look like (layout)
  + Login form validation (email format, all value cannot be null and random confirmation code is needed)
  + Matching the form email and password with the database's data
4. Music player (mainly based on HTML5 new features and JS)
+ Drag CDs on player: Berry
using the HTML5 new feature drag and drop, every element is draggable by setting the attribute 'draggable' to true.
+ Play the music: Will
using JS to get music file and set the audio attribute to autoplay when users click the play button.
5. Piano (mainly based on JS)
+ Piano's main view and keys: Berry
  + Piano container in HTML
  + Combine piano keys with keyboard keys (like 'q' binds the 1st key in piano), which based on JS Eventlistener (onkeyup/onkeydown)
  + Combine piano keys with mouse click event (mouseup/mousedown)
+ Piano's key sounds and sounds binding: Will
  +  Encoding ogg sounds to base64 and save them on the JS file.
  + Combine sounds with keys in piano
  when mouse click or press the specific keys on keyboard, the audio attribute would add the sounds base64 codes to make it can play sounds.  

6.Beautify (mainly based on CSS)
+ Design beautiful pictures suited for the website's all features and functions: designers
+  Implementing the design: Programmers (assign coding work to progammers according to functions above)
