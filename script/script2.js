//console.log("Script2 is connected.");
// table to excel function
function exportTableToExcel(tableID, filename = "") {
  console.log("export button fired");
  var downloadLink;
  var dataType = "application/vnd.ms-excel";
  var tableSelect = document.getElementById(tableID);
  var tableHTML = tableSelect.outerHTML.replace(/ /g, "%20");
  // specify file name
  filename = filename ? filename + ".xls" : "excel_data.xls";
  // create download link element
  downloadLink = document.createElement("a");
  document.body.appendChild(downloadLink);
  if (navigator.msSaveOrOpenBlog) {
    var blob = new Blob(["/ufeff", tableHTML], {
      type: dataType,
    });
    navigator.msSaveOrOpenBlog(blob, filename);
  } else {
    //create a link to the file
    downloadLink.href = "data:" + dataType + ", " + tableHTML;
    // setting the file name
    downloadLink.download = filename;
    // triggering the function
    downloadLink.click();
  }
}

// Summary page modal function
// const openModalButtons = document.querySelectorAll("[data-modal-target]");
// const closeModalButtons = document.querySelectorAll("[data-close-button]");
// const overlay = document.getElementById("overlay");

// openModalButtons.forEach((button) => {
//   button.addEventListener("click", () => {
//     const modal = document.querySelector(button.dataset.modalTarget);
//     openModal(modal);
//   });
// });

// overlay.addEventListener("click", () => {
//   const modals = document.querySelectorAll(".modal.active");
//   modals.forEach((modal) => {
//     closeModal(modal);
//   });
// });

// closeModalButtons.forEach((button) => {
//   button.addEventListener("click", () => {
//     const modal = button.closest(".modal");
//     closeModal(modal);
//   });
// });

// function openModal(modal) {
//   if (modal == null) return;

//   modal.classList.add("active");
//   overlay.classList.add("active");
// }

// function closeModal(modal) {
//   if (modal == null) return;
//   modal.classList.remove("active");
//   overlay.classList.remove("active");
// }
