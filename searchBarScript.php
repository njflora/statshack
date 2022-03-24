<script type="text/javascript">
        function active(){
            var searchBar = document.getElementById('search');
            if(searchBar.value == 'Search Flights by Origin...'){
                searchBar.value = ''
                searchBar.placeholder = 'Search Flights by Origin...'
            }
        }
        function inactive(){
            var searchBar = document.getElementById('search');
            if(searchBar.value == ''){
                searchBar.value = 'Search Flights by Origin...'
                searchBar.placeholder = ''
            }
        }
    </script>