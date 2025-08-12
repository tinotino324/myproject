function datatable(data, result, page_no, columns, method)
{
    var html            = '';
    var total_counts    = parseInt(result.total_counts); 
    var offset          = parseInt(result.offset); 
    var length          = parseInt(result.length); 
    var page_count      = Math.ceil(total_counts / length);
    var listing_counts  = parseInt(result.listing_counts) + offset;
   
    html +=
            `<table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>`
                columns.forEach(column => {
    html +=         `<th>${column}</th>`
                });
    html +=         `</tr>
                </thead>
                <tbody>
                    ${data}
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div id="lengthDiv">
                    Show 
                    <select id="lengthSelect" class="form-select d-inline-block w-auto" onchange="${method}()">
                        <option value="10" ${(length == 10) ? "selected" : ""}>10</option>
                        <option value="25" ${(length == 25) ? "selected" : ""}>25</option>
                        <option value="50" ${(length == 50) ? "selected" : ""}>50</option>
                        <option value="100" ${(length == 100) ? "selected" : ""}>100</option>
                    </select>
                    entries
                </div>
                <div id="entryCountText" class="text-center">Showing ${offset + 1} to ${listing_counts} of ${total_counts} entries</div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item" ><button class="page-link ${(page_no <= 0) ? 'disabled' : ''}" onclick="${method}(${page_no},'pre')">Previous</button></li>`
                        for(i = 0 ; i < page_count ; i++)
                        {
         html +=           `<li class="page-item ${page_no == i ? 'active' : ''}"><button class="page-link" onclick="${method}(${i})">${i + 1}</button></li>`
                        }
         html +=           `<li class="page-item"><button class="page-link ${((page_no + 1) == page_count) ? 'disabled' : ''}" onclick="${method}(${page_no},'next')">Next</button></li>
                        </ul>
                    </nav>
                </div>
            </div>
            `;
           
    return html;        
}