<script>
   import { user } from "$lib/stores/user.svelte.js";

   async function changeSettings(e){
      e.preventDefault();

      const data = new FormData(e.target);
   }
</script>

<form onsubmit={changeSettings}>
   <fieldset>
      <legend>Kontaktuppgifter</legend>
      <p>Här måste tabellen user utökas med information som kan ändras.</p>
      <p>Exempelvis: E-post och telefonnummer</p>
   </fieldset>
</form>

<style lang="scss">
   fieldset {
      padding: 0.5rem;
      legend {
         padding: 0.5rem;  
      }
   }

   label {
      margin-top: 0.5rem;
      display: block;
   }

   input {
      display: inline-block;
      width: 90%;
      &[type="submit"] {
         color: white;
         background-color: #42b72a;
         border: none;
         margin: 10px 10px 0 0;
         padding: 0.5rem 1rem;
         border-radius: 6px;
         display: inline;
         width: auto;
         &:hover {
            background-color: green;
         }
      }
   }
</style>
