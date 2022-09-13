new gridjs.Grid({
    search: true,
    resizable: true,
    sort: true,
    pagination: { enabled: true, limit: 10, summary: true },

    language: {
        'search': {
          'placeholder': 'Pesquisar...'
    },
        'pagination': {
            'previous': 'Anterior',
            'next': 'Proximo',
            'showing': 'Mostrando',
            'results': () => 'registros'
        }

    },
    
    columns: [
              { name: "Nome", width: '50%'},
              { name: "Sobrenome",hidden: false },
              { name: "Fone"},
              { name: "E-mail"}
            ],


    server: {
        url: 'http://127.0.0.1:8080/temp/users/api/user/get_users.php',
        then: data => data.map(users => [users.firstname, users.lastname, users.phone, users.email])},

    

  }).render(document.getElementById("wrapper"));