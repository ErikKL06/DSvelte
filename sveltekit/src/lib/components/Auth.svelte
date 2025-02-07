<script>
   import { user } from "$lib/stores/user.svelte.js";
   import { goto } from "$app/navigation";
   
   // Ev egen kod!
   
   async function signIn(e) {
      e.preventDefault();
      const formData = new FormData(e.target);
      
      // Egen kod!
   }
</script>

<form onsubmit={signIn} bind:this={form}>
   <!-- Egen kod! -->
</form>

<style lang="scss">
   label {
      display: block;
   }

   input {
      width: 100%;

      &.red {
         background-color: rgb(247, 129, 129);
      }

      &[type="submit"] {
         color: white;
         background-color: #42b72a;
         border: none;
         margin: 10px 10px 0 0;
         padding: 0.7rem;
         border-radius: 6px;

         &:hover {
            background-color: green;
         }
      }
   }
</style>
