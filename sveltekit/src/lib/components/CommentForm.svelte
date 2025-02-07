<script>
   import { update } from "$lib/stores/update.svelte.js";

   // Ev egen kod!

   let { postID } = $props();

   async function addComment(e) {
      e.preventDefault();
      // Egen kod!
   }
</script>
   <!-- Egen kod! -->
<form onsubmit={addComment}>
   
</form>

<style lang="scss">
   form {
      display: flex;
      flex-direction: row;

      width: 100%;

      input[type='text'] {
         width: 100%;
      }

      input[type='submit']{
         border: none;
         border-radius: 4px;
         padding: 5px 15px;
         text-decoration: none;
         color: white;
         background-color: #42b72a;
         margin-left: 2px;  
         flex-grow: 0;
         &:hover {
            background-color: darkgreen;
            color: #ffffff;
         }
      }
   }
</style>
