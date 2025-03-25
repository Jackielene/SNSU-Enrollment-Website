document.addEventListener('DOMContentLoaded', function () {
  const dropdownToggles = document.querySelectorAll('.navbar .dropdown-toggle');

  dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', function (e) {
          e.preventDefault();
          const dropdownMenu = this.nextElementSibling;
          if (dropdownMenu) {
              dropdownMenu.classList.toggle('show');
          }
      });
  });

  // Close dropdown when clicking outside
  window.addEventListener('click', function (e) {
      dropdownToggles.forEach(toggle => {
          if (!toggle.contains(e.target) && !toggle.nextElementSibling.contains(e.target)) {
              toggle.nextElementSibling.classList.remove('show');
          }
      });
  });
});

/*Video Transition*/
document.addEventListener("DOMContentLoaded", function () {
    const video = document.querySelector(".video-scroll");
  
    function checkScroll() {
      const videoPosition = video.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.2;
  
      if (videoPosition < screenPosition) {
        video.classList.add("show");
      }
    }
  
    // Initial check in case the video is already in view
    checkScroll();
  
    // Listen for scroll events
    window.addEventListener("scroll", checkScroll);
  });

  const video = document.querySelector('.video-scroll');
  const content = document.querySelector('.content-scroll');
  
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        video.classList.add('show');
        content.classList.add('show');
      }
    });
  });
  
  observer.observe(video);
  observer.observe(content);
  
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".values .card");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          entry.target.style.transitionDelay = `${index * 0.2}s`; // Adds a delay for each card
        }
      });
    }, { threshold: 0.1 });
  
    cards.forEach((card) => {
      observer.observe(card);
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".values .card");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          entry.target.style.transitionDelay = `${index * 0.2}s`; // Staggered delay for each card
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.1 });
  
    cards.forEach((card) => {
      observer.observe(card);
    });
  });
//button
  document.getElementById("exploreBtn").addEventListener("click", function () {
    document.getElementById("tabs").scrollIntoView({ behavior: "smooth" });
});

window.addEventListener("load", function () {
  document.getElementById("preloader").classList.add("hidden");
  document.body.classList.remove("preload-active"); // Enable scrolling after preloader hides
});


//scroll navbar
document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
      } else {
          navbar.classList.remove("scrolled");
      }
  });
});


//srolling 
document.addEventListener("DOMContentLoaded", function () {
  const toggler = document.querySelector(".custom-toggler");

  toggler.addEventListener("click", function () {
    toggler.classList.toggle("open");
  });
});

window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
  } else {
      navbar.classList.remove("scrolled");
  }
});

const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}



//*Schedules
function printSchedule() {
  window.print();
}

function exportToPDF() {
  const element = document.getElementById("scheduleTable");
  html2pdf().from(element).save("Class_Schedule.pdf");
}

// Print Schedule
function printSchedule() {
  window.print();
}

// Export Schedule to PDF with Improved Formatting
function exportToPDF() {
  const { jsPDF } = window.jspdf;
  const doc = new jsPDF({
      orientation: "landscape", // Landscape mode for better readability
      unit: "mm",
      format: "a4" // A4 paper size
  });

  // Title Styling
  doc.setFont("helvetica", "bold");
  doc.setFontSize(16);
  doc.text("Class Schedule", 140, 15, { align: "center" });

  // Table Configuration
  doc.autoTable({
      html: "table", // Target the existing table in HTML
      startY: 25, // Start position below the title
      theme: "grid",
      styles: {
          fontSize: 10, // Set font size
          halign: "center", // Center align text
          cellPadding: 4
      },
      headStyles: {
          fillColor: [0, 102, 204], // Blue header background
          textColor: [255, 255, 255], // White text
          fontStyle: "bold"
      },
      alternateRowStyles: {
          fillColor: [245, 245, 245] // Light gray alternating row color
      },
      columnStyles: {
          0: { cellWidth: 35 }, // Adjust "Time" column width
          1: { cellWidth: 40 }, // Monday
          2: { cellWidth: 40 }, // Tuesday
          3: { cellWidth: 40 }, // Wednesday
          4: { cellWidth: 40 }, // Thursday
          5: { cellWidth: 40 }, // Friday
          6: { cellWidth: 40 }  // Saturday
      }
  });



// Footer
  const pageHeight = doc.internal.pageSize.height;
  doc.setFontSize(10);
  doc.text("Generated on: " + new Date().toLocaleDateString(), 15, pageHeight - 10);

  // Save the file
  doc.save("Class_Schedule.pdf");
}



// Grades PD
function exportGradesPDF() {
  if (!window.jspdf) {
      alert("Error: jsPDF library is not loaded.");
      return;
  }

  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  // University Header
  doc.setFont("helvetica", "bold");
  doc.setFontSize(16);
  doc.text("Surigao del Norte State University", 20, 20);

  // Breadcrumb Navigation
  doc.setFontSize(11);
  doc.setFont("helvetica", "normal");
  doc.text("Home > Student Portal > Grades", 20, 30);
  doc.line(20, 32, 190, 32);

  // Student Information
  doc.setFontSize(12);
  doc.setFont("helvetica", "bold");
  doc.text("Student Information", 20, 42);
  doc.setFont("helvetica", "normal");
  doc.text("Name: Juan Dela Cruz", 20, 50);
  doc.text("Student ID: 202312345", 20, 56);
  doc.text("Course: BSIT - 3rd Year", 20, 62);

  // Selected Semester
  const selectedSemester = document.getElementById("semester")?.value || "N/A";
  doc.setFont("helvetica", "bold");
  doc.text("Selected Semester: ", 20, 72);
  doc.setFont("helvetica", "normal");
  doc.text(selectedSemester, 70, 72);

  // Table Headers
  const tableHeaders = [["Code", "Subject Name", "Units", "Grade", "Remarks"]];
  const tableBody = Array.from(document.querySelectorAll(".table tbody tr")).map(row => {
      return Array.from(row.children).map(cell => cell.innerText);
  });

  // Generate Table in PDF
  doc.autoTable({
      startY: 80,
      head: tableHeaders,
      body: tableBody,
      theme: "grid",
      styles: { fontSize: 10, halign: "center" },
      headStyles: { fillColor: [40, 167, 69], textColor: [255, 255, 255] },
  });

  // GPA Section
  const finalY = doc.autoTable.previous.finalY + 10;
  doc.setFont("helvetica", "bold");
  doc.text("Semester GPA: ", 20, finalY);
  doc.setFont("helvetica", "normal");
  doc.text("3.25", 60, finalY);

  doc.setFont("helvetica", "bold");
  doc.text("Overall GPA: ", 120, finalY);
  doc.setFont("helvetica", "normal");
  doc.text("3.21", 160, finalY);

  // Footer
  const generatedDate = new Date().toLocaleDateString("en-US"); // Format: MM/DD/YYYY
  doc.setFontSize(10);
  doc.text(`Generated on: ${generatedDate}`, 20, finalY + 20);
  
  doc.setFont("helvetica", "bold");
  doc.text("Contact Support | Surigao del Norte State University", 20, finalY + 30);

  // Save the PDF
  doc.save("Student_Grades.pdf");
}

//Profile Page

    // Simulated evaluation status (Set to true to test "Done" status)
    let isEvaluated = false;

    // Update the status dynamically
    const statusText = document.getElementById("evaluationStatus");
    if (isEvaluated) {
        statusText.innerHTML = "✔ Done";
        statusText.classList.remove("status-not-done");
        statusText.classList.add("status-done");
    }
