var main = new Vue({
    el: '#div_table',
    data: {
        table_data: {
            rows: 10,
            cols: 10
        },
        active:{
            col: null,
            row: null
        },
        activeClass: 'active',
        errorClass: 'grid_data_col'
    },
    methods: {
        setActive: function (col, row) {
            this.active = {};
            this.active['col'] = col;
            this.active['row'] = row;
            document.getElementsByClassName("grid_data_col")[row*(col-1)].clasName += 'grid_data_active';
        }
    }

});