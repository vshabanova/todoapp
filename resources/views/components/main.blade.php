<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
    <script>
      function completeTask(taskId) {
          fetch(`/tasks/${taskId}/complete`, {
              method: 'POST',
              headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
                  'Content-Type': 'application/json',
              },
          })
              .then(response => response.json())
              .then(data => {
                  // Reload the page or update the UI as needed
                  location.reload();
              })
              .catch(error => {
                  console.error('Error completing task:', error);
              });
      }
  </script>
  </main>