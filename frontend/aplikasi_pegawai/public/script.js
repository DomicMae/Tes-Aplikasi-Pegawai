const employeeForm = document.getElementById("employeeForm");
const employeeTableBody = document.getElementById("employeeTableBody");
const employees = [];

employeeForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const address = document.getElementById("address").value;
  const dob = document.getElementById("dob").value;
  const room = document.getElementById("room").value;
  const employeeIndex = document.getElementById("employeeIndex").value;

  if (employeeIndex) {
    employees[employeeIndex] = { name, address, dob, room };
  } else {
    employees.push({ name, address, dob, room });
  }

  renderTable();
  employeeForm.reset();
  document.getElementById("employeeIndex").value = "";
});

function renderTable() {
  employeeTableBody.innerHTML = "";
  employees.forEach((employee, index) => {
    const row = `
            <tr>
                <td>${index + 1}</td>
                <td>${employee.name}</td>
                <td>${employee.address}</td>
                <td>${employee.dob}</td>
                <td>${employee.room}</td>
                <td>
                    <button class="edit" onclick="editEmployee(${index})">Edit</button>
                    <button class="delete" onclick="deleteEmployee(${index})">Hapus</button>
                </td>
            </tr>
        `;
    employeeTableBody.innerHTML += row;
  });
}

function editEmployee(index) {
  const employee = employees[index];
  document.getElementById("name").value = employee.name;
  document.getElementById("address").value = employee.address;
  document.getElementById("dob").value = employee.dob;
  document.getElementById("room").value = employee.room;
  document.getElementById("employeeIndex").value = index;
}

function deleteEmployee(index) {
  employees.splice(index, 1);
  renderTable();
}
