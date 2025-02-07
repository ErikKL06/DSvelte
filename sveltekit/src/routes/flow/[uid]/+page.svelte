<script>
   import { page } from "$app/state";
   import Load from "$lib/components/Load.svelte";
   import Post from "$lib/components/Post.svelte";
   import CommentForm from "$lib/components/CommentForm.svelte";
   import Comment from "$lib/components/Comment.svelte";

   import { user } from "$lib/stores/user.svelte.js";
   import { update } from "$lib/stores/update.svelte.js";
   import { goto, afterNavigate } from "$app/navigation";
   import { auth } from "$lib/shared/auth.js";

   afterNavigate(async () => {
      const response = await auth();
      user.auth = response.auth;
      user.userdata = response.userdata;

      if (!user.auth) {
         goto("/login");
      }
   });

   // Hämtar användare med uid, page.params.uid
   async function getUser() {
      // Egen kod

      return {firstname: "Xxx", surname: "Yyyy"};
   }
</script>

{#await getUser() then user}
   <h1>{user.firstname} {user.surname} TALK</h1>
{/await}

<section>
   <!-- Rendera flödet från användare med [uid] -->
</section>

<style lang="scss">
   section {
      max-width: 540px;

      hr {
         margin-bottom: 16px;
         margin-top: 8px;
      }

      div {
         border-left: 2px solid green;
      }
   }
</style>
