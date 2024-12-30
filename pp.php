<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autocomplete Tags</title>
  <style>
    .chip-container {
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
      margin-top: 10px;
    }

    .chip {
      background-color: #e0e0e0;
      padding: 5px 10px;
      border-radius: 15px;
      display: flex;
      align-items: center;
    }

    .chip span {
      margin-right: 5px;
    }

    .chip button {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    .autocomplete-list {
      border: 1px solid #ccc;
      max-height: 150px;
      overflow-y: auto;
      background: white;
      position: absolute;
      width: 100%;
      z-index: 1000;
    }

    .autocomplete-list div {
      padding: 10px;
      cursor: pointer;
    }

    .autocomplete-list div:hover {
      background-color: #f0f0f0;
    }

    #autocomplete-input {
      width: 100%;
      max-width: 600px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
  </style>
</head>

<body>
  <input type="hidden" name="table-content" id="table-content">
  <input type="text" id="autocomplete-input" placeholder="Enter tags..." autocomplete="off">
  <div class="chip-container" id="chip-container"></div>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const input = document.getElementById("autocomplete-input");
      const chipContainer = document.getElementById("chip-container");
      const autocompleteList = document.getElementById("autocomplete-list");
      const tableContent = document.getElementById("table-content");
      let selectedTags = [];

      // Predefined list of suggestions
      // const suggestions = [
      //   "Development",
      //   "Debugging",
      //   "Denazification",
      //   "UI design",
      //   "Web design",
      //   "CSS",
      //   "HTML",
      //   "JavaScript",
      //   "Figma",
      //   "React",
      //   "Vue.js"
      // ];

      // Update chip display
      function updateChips() {
        chipContainer.innerHTML = "";
        selectedTags.forEach(tag => {
          const chip = document.createElement("div");
          chip.className = "chip";
          chip.innerHTML = `<span>${tag}</span><button data-tag="${tag}">&times;</button>`;
          chip.querySelector("button").addEventListener("click", function() {
            selectedTags = selectedTags.filter(t => t !== tag);
            updateChips();
          });
          chipContainer.appendChild(chip);
        });
      }

      input.addEventListener("keypress", (event) => {
        if (event.key == "Enter") {
          if (!selectedTags.includes(input.value) && input.value !== " ") {
            selectedTags.push(input.value);
            updateChips();
          }
          input.value = "";
          tableContent.value = selectedTags.join(", ");
          console.log(tableContent.value)
        }
      });

      // Filter suggestions based on input
      // function filterSuggestions(query) {
      //   return suggestions.filter(suggestion =>
      //     suggestion.toLowerCase().includes(query.toLowerCase())
      //   );
      // }

      // Show autocomplete suggestions
      // function showSuggestions(filteredSuggestions) {
      //   autocompleteList.innerHTML = "";
      //   filteredSuggestions.forEach(suggestion => {
      //     const item = document.createElement("div");
      //     item.textContent = suggestion;
      //     item.addEventListener("click", function() {
      //       if (!selectedTags.includes(suggestion)) {
      //         selectedTags.push(suggestion);
      //         updateChips();
      //       }
      //       input.value = "";
      //       autocompleteList.innerHTML = "";
      //     });
      //     autocompleteList.appendChild(item);
      //   });
      // }

      // Handle input events
      // input.addEventListener("input", function() {
      //   const query = input.value.trim();
      //   if (query.length > 0) {
      //     const filtered = filterSuggestions(query);
      //     showSuggestions(filtered);
      //   } else {
      //     autocompleteList.innerHTML = "";
      //   }
      // });

      // Close the suggestions when clicking outside
      // document.addEventListener("click", function(e) {
      //   if (!e.target.closest("#autocomplete-input, #autocomplete-list")) {
      //     autocompleteList.innerHTML = "";
      //   }
      // });
    });
  </script>
</body>

</html>