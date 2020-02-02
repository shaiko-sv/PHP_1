Vue.component('products', {
    data() {
        return {
            catalogUrl: `../engine/product.php?id=`,
            products: [],
            allProducts: [],
            imgCatalog: `https://placehold.it/200x150`,
            filtered: [],
        }
    },
    methods: {
        filter(value){
            if(!value) {
                this.products = [...this.allProducts];
            } else {
                this.products = [];
                let regexp = new RegExp(value, 'i');
                this.filtered = this.allProducts.filter(el => regexp.test(el.product_name));
                this.allProducts.forEach(el => {
                    if(this.filtered.includes(el)){
                        this.products.push(el)
                    }
                })
            }
        },
        openDescription(id){
            this.$parent.getJson(`../engine/ajaxfile.php?table=products&id_product=${id}`)
                .then(data => {
                    console.log(data);
                })
        },
    },
    mounted() {
        this.$parent.getJson(`../engine/ajaxfile.php?table=products`)
            .then(data => {
                console.log(data);
                for(let el of data){
                    this.products.push(el);
                    this.allProducts.push(el);
                }
            })
    },
    template: `<div class="products">
            <product
            v-for="product of products"
            :key="product.id_product"
            :id="product.id_product"
            :product="product"
            :img="imgCatalog"
            :url="catalogUrl"></product>
        </div>`,
});

Vue.component('product', {
    props: ['product', 'img','url','id'],
    template: `<div class="product-item">
                <a :href="url+id">
                <img :src="img" :alt="product.product_name">
                </a>
                <div class="desc">
                    <h3>{{ product.product_name }}</h3>
                    <p>{{ product.price }}</p>
                    <button class="buy-btn"
                            @click="$root.$refs.cart.addProduct(product)">Купить</button>
                </div>
            </div>`,
})