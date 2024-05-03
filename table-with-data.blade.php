<div class="card">
     <div class="card-body">
     <h4 class="card-title">{{ $title }}</h4>
     <p class="card-description">{{ $description }}</p>
     <div class="table-responsive">
     <input type="text" class="form-control mb-4" id="searchInput" placeholder="Search...">
     <table class="table">
     {{ $slot }}
     </table>
     </div>
     </div>
     </div>
     
     
     
     <script>
     document.addEventListener('DOMContentLoaded', function() {
     var searchInput = document.getElementById('searchInput');
     searchInput.addEventListener('input', function() {
     var searchText = this.value.toLowerCase();
     var rows = document.querySelectorAll('table tbody tr');
     
     rows.forEach(function(row) {
     var rowData = row.textContent.toLowerCase();
     if (rowData.includes(searchText)) {
     row.style.display = '';
     } else {
     row.style.display = 'none';
     }
     });
     });
     });
     </script>