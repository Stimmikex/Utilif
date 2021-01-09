<div class="searchPanel__container">
    <div class="searchPanel__container__sort">
        <p>Sort By:</p>
        <select onchange="selectedSearch()" id="mySelect">
            <option value="0">Best Match</option>
            <option value="1">Price</option>
            <option value="2">Deal</option>
            <option value="3">A - Z</option>
            <option value="4">Z - A</option>
        </select>
    </div>
    <div class="searchPanel__container__stats">
        <p>Section {Name}</p>
        <p>items: {number} </p>
    </div>
</div>
<script>
    var sel = 0;
    function selectedSearch() {
        var x = document.getElementById("mySelect").value;
        setSelected(x);
    }
    function setSelected(newSel) {
        sel = newSel;
    }
    function getSelected() {
        return sel
    }
</script>