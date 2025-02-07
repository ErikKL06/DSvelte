<script>
   let pwd = $state("");
   let pwdConfirm = $state("");

   // Ev egen kod!

   async function changePwd(e) {
      e.preventDefault();
      // Egen kod!
   }
</script>

<form onsubmit={changePwd} >
   <fieldset>
      <legend>Byt Lösenord</legend>

      <!-- Egen kod! -->

      <input type="submit" value="Byt Lösenord" />
   </fieldset>
</form>

<style lang="scss">
   form {
      fieldset {
         padding: 0.5rem;
         legend {
            padding: 0.5rem;
         }
      }

      label {
         margin-top: 0.5rem;
         display: inline-block;
      }

      input {
         display: block;
         width: 90%;

         &[type="submit"] {
            color: white;
            background-color: #42b72a;
            border: none;
            margin: 10px 10px 0 0;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            width: auto;
            &:hover {
               background-color: green;
            }
         }

         &.missMatch {
            background-color: rgb(250, 129, 129);
         }
      }

      --color: white;
      div {
         display: inline-block;
         border: 1px solid black;
         margin-left: 1rem;
         margin-bottom: -0.1rem;
         width: 1.1rem;
         height: 1.1rem;
         background-color: var(--color);
      }
   }
</style>
