

  <div class="container-employee">
    <table>
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>johndoe@example.com</td>
          <td class="actions">
            <button class="delete-btn" onclick="deleteEmployee(1)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>janesmith@example.com</td>
          <td class="actions">
            <button class="delete-btn" onclick="deleteEmployee(2)">Delete</button>
          </td>
        </tr>
        <!-- Add more rows for other employees -->
      </tbody>
    </table>
  </div>
  <script>
    function deleteEmployee(employeeId) {
      // Code to delete the employee with the given ID
    }
  </script>