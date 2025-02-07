<script>
   import Load from "$lib/components/Load.svelte";
   import PostForm from "$lib/components/PostForm.svelte";
   import Post from "$lib/components/Post.svelte";
   import CommentForm from "$lib/components/CommentForm.svelte";
   import Comment from "$lib/components/Comment.svelte";

   import { user } from "$lib/stores/user.svelte.js";
   import { goto, afterNavigate } from "$app/navigation";
   import { auth } from "$lib/shared/auth.js";
   import { update } from "$lib/stores/update.svelte.js";

   afterNavigate(async () => {
      const response = await auth();
      user.auth = response.auth;
      user.userdata = response.userdata;

      if (!user.auth) {
         goto("/login");
      }
   });
</script>

<PostForm />

<section>
   <!-- Rendera flödet för alla användare -->
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
         padding-left: 4px;
      }
   }
</style>
