fetch('php/get_data_table.php')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.querySelector('#data-table tbody');
        data.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.no}</td>
                <td>${row.jenis}</td>
                <td>${row.nama}</td>
                <td>${row.kelas}</td>
                <td>${row.kabko}</td>
                <td>${row.detail}</td>
                <td>
                    <button class="edit">Edit</button>
                    <button class="hapus">Delete</button>
                </td> 
            `;
            tableBody.appendChild(tr);
        });
    })
    .catch(error => console.error('Error:', error));

    