<script>
   import { user } from "$lib/stores/user.svelte.js";
   import { goto } from "$app/navigation";

   let result = $state({ success: false });
   // Ev egen kod!

   async function signUp(e) {
      e.preventDefault();
      const formData = new FormData(e.target);

      // Egen kod!
   }
</script>

{#if result.success}
   <div class="blur">
      <div>
         <hr />
         <button>
            <img
               src="images/close.png"
               alt="close"
               width="32"
               onclick={() => (result.success = false)}
               role="none"
            />
         </button>
         <h1>Ditt konto är skapat!</h1>
         <p>Stäng fönstret och logga in.</p>
      </div>
   </div>
{/if}

<form onsubmit={signUp}>
   <label for="fn">Förnamn</label>
   <input id="fn" type="text" name="firstname" />

   <label for="ln">Efternamn</label>
   <input id="ln" type="text" name="surname" />

   <label for="usr">Användarnamn</label>
   <input id="usr" type="text" name="user" />

   <label for="pwd">Lösenord</label>
   <input id="pwd" type="password" name="pwd" />

   <input type="submit" value="Skapa Konto" />
</form>

<style lang="scss">
   /* Meddelanderuta */
   div {
      position: fixed;
      top: 150px;
      left: 100px;
      z-index: 100;
      border: 2px solid black;
      border-radius: 8px;
      background-color: white;
      width: 80%;

      hr {
         border: 22px solid grey;
      }
      h1 {
         font-family: Arial, Helvetica, sans-serif;
         font-size: 2.4rem;
         letter-spacing: normal;
         margin-left: 10px;
      }

      p {
         font-size: 1.8rem;
         padding-bottom: 40px;
         margin-left: 10px;
      }

      button {
         border: none;
         img {
            position: absolute;
            top: 5px;
            right: 5px;
         }
      }

      &.blur {
         z-index: 20;
         position: fixed;
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         background: rgba(255, 255, 255, 0.8);
         backdrop-filter: grayscale(0.5) blur(2px);
      }
   }

   /* Formulär, skapa konto */
   form {
      label {
         display: block;
      }

      input {
         width: 100%;

         &[type="submit"] {
            color: white;
            background-color: #166fe5;
            border: none;
            margin: 10px 10px 0 0;
            padding: 0.7rem;
            border-radius: 6px;

            &:hover {
               background-color: blue;
            }
         }
      }
   }

   @media only screen and (max-width: 675px) {
      div {
         left: 10px;
      }
   }
</style>
