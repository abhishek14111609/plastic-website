const CART_KEY = "sp_cart";
const SP_ROUTES = window.SP_ROUTES || {
    home: "index.html",
    products: "products.html",
    details: "product-details.html",
    cart: "cart.html",
    checkout: "checkout.html"
};

function getCart() {
    const raw = localStorage.getItem(CART_KEY);
    return raw ? JSON.parse(raw) : [];
}

function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    updateCartCount();
}

function updateCartCount() {
    const cart = getCart();
    const totalQty = cart.reduce((sum, item) => sum + item.qty, 0);
    document.querySelectorAll("#cartCount").forEach((badge) => {
        badge.textContent = totalQty;
    });
}

function addToCart(productId) {
    const cart = getCart();
    const existing = cart.find((item) => item.id === productId);

    if (existing) {
        existing.qty += 1;
    } else {
        cart.push({ id: productId, qty: 1 });
    }

    saveCart(cart);
    showToast("Product added to cart");
}

function removeFromCart(productId) {
    let cart = getCart();
    cart = cart.filter((item) => item.id !== productId);
    saveCart(cart);
    renderCartPage();
}

function updateQty(productId, delta) {
    const cart = getCart();
    const item = cart.find((entry) => entry.id === productId);

    if (!item) return;

    item.qty += delta;
    if (item.qty <= 0) {
        removeFromCart(productId);
        return;
    }

    saveCart(cart);
    renderCartPage();
}

function formatPrice(price) {
    return new Intl.NumberFormat("en-IN", {
        style: "currency",
        currency: "INR",
        maximumFractionDigits: 0
    }).format(price);
}

function productCard(product, showAdd = true) {
    return `
    <div class="col-sm-6 col-lg-4 col-xl-3">
      <div class="product-card h-100">
        <div class="product-img-wrap">
          <img src="${product.image}" alt="${product.name}" class="img-fluid product-img">
        </div>
        <div class="p-3 d-flex flex-column h-100">
          <span class="badge text-bg-light border mb-2 w-fit">${product.category}</span>
          <h6 class="fw-semibold mb-1">${product.name}</h6>
          <p class="text-secondary small mb-2">${product.manufacturer}</p>
          <div class="d-flex justify-content-between align-items-center mt-auto">
            <span class="fw-bold text-primary-emphasis">${formatPrice(product.price)}</span>
            <div class="d-flex gap-2">
              <a href="${SP_ROUTES.details}?id=${product.id}" class="btn btn-sm btn-outline-primary">View Details</a>
              ${showAdd ? `<button class="btn btn-sm btn-primary" data-add-to-cart="${product.id}"><i class="fa-solid fa-cart-plus"></i></button>` : ""}
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
}

function renderTrending() {
    const container = document.getElementById("trendingProducts");
    if (!container) return;

    container.innerHTML = PRODUCTS.slice(0, 8).map((product) => productCard(product)).join("");
}

function renderProductsPage() {
    const grid = document.getElementById("productsGrid");
    if (!grid) return;

    const category = document.getElementById("filterCategory").value;
    const maxPrice = parseInt(document.getElementById("filterPrice").value, 10);
    const sort = document.getElementById("sortPrice").value;

    let result = PRODUCTS.filter((product) => {
        const categoryPass = category === "all" || product.category === category;
        const pricePass = product.price <= maxPrice;
        return categoryPass && pricePass;
    });

    if (sort === "low-high") {
        result.sort((a, b) => a.price - b.price);
    }
    if (sort === "high-low") {
        result.sort((a, b) => b.price - a.price);
    }

    document.getElementById("priceRangeLabel").textContent = formatPrice(maxPrice);

    if (!result.length) {
        grid.innerHTML = `<div class="col-12"><div class="alert alert-info">No products match your filters.</div></div>`;
        return;
    }

    grid.innerHTML = result.map((product) => productCard(product)).join("");
}

function renderProductDetails() {
    const container = document.getElementById("productDetailsContainer");
    if (!container) return;

    const params = new URLSearchParams(window.location.search);
    const id = Number(params.get("id"));
    const product = PRODUCTS.find((entry) => entry.id === id) || PRODUCTS[0];

    container.innerHTML = `
    <div class="col-lg-6">
      <div class="details-image-panel">
        <img src="${product.image}" alt="${product.name}" class="img-fluid rounded-4">
      </div>
    </div>
    <div class="col-lg-6">
      <span class="badge text-bg-light border mb-2">${product.category}</span>
      <h2 class="fw-bold mb-2">${product.name}</h2>
      <p class="text-secondary mb-2">Manufactured by <strong>${product.manufacturer}</strong></p>
      <h3 class="text-primary fw-bold mb-3">${formatPrice(product.price)}</h3>
      <p class="text-muted mb-4">${product.description}</p>
      <div class="d-flex gap-3 flex-wrap">
        <button class="btn btn-primary btn-lg" data-add-to-cart="${product.id}"><i class="fa-solid fa-cart-plus me-2"></i>Add to Cart</button>
        <button class="btn btn-outline-secondary btn-lg"><i class="fa-regular fa-heart me-2"></i>Add to Wishlist</button>
      </div>
      <div class="mt-4 p-3 rounded-3 bg-body-tertiary border">
        <h6 class="fw-semibold">Why buyers choose this product</h6>
        <ul class="mb-0 small text-secondary">
          <li>Bulk order ready with fast dispatch</li>
          <li>Quality verified for industrial use</li>
          <li>Competitive B2B pricing</li>
        </ul>
      </div>
    </div>
  `;
}

function renderCartPage() {
    const cartContainer = document.getElementById("cartItemsContainer");
    if (!cartContainer) return;

    const cart = getCart();

    if (!cart.length) {
        cartContainer.innerHTML = `
      <tr>
        <td colspan="5" class="text-center py-5">
          <h5 class="mb-2">Your cart is empty</h5>
          <p class="text-muted mb-3">Browse products and add items to see them here.</p>
          <a href="${SP_ROUTES.products}" class="btn btn-primary">Start Shopping</a>
        </td>
      </tr>
    `;
        document.getElementById("cartSubtotal").textContent = formatPrice(0);
        document.getElementById("cartTotal").textContent = formatPrice(0);
        return;
    }

    let subtotal = 0;

    cartContainer.innerHTML = cart
        .map((item) => {
            const product = PRODUCTS.find((entry) => entry.id === item.id);
            if (!product) return "";
            const lineTotal = product.price * item.qty;
            subtotal += lineTotal;

            return `
        <tr>
          <td>
            <div class="d-flex align-items-center gap-3">
              <img src="${product.image}" alt="${product.name}" class="cart-thumb">
              <div>
                <h6 class="mb-1">${product.name}</h6>
                <p class="mb-0 text-secondary small">${product.category}</p>
              </div>
            </div>
          </td>
          <td>${formatPrice(product.price)}</td>
          <td>
            <div class="qty-control">
              <button class="btn btn-sm btn-outline-secondary" data-qty="minus" data-id="${product.id}">-</button>
              <span>${item.qty}</span>
              <button class="btn btn-sm btn-outline-secondary" data-qty="plus" data-id="${product.id}">+</button>
            </div>
          </td>
          <td class="fw-semibold">${formatPrice(lineTotal)}</td>
          <td><button class="btn btn-sm btn-link text-danger" data-remove="${product.id}">Remove</button></td>
        </tr>
      `;
        })
        .join("");

    const shipping = subtotal > 0 ? 99 : 0;
    const total = subtotal + shipping;

    document.getElementById("cartSubtotal").textContent = formatPrice(subtotal);
    document.getElementById("cartShipping").textContent = formatPrice(shipping);
    document.getElementById("cartTotal").textContent = formatPrice(total);
}

function renderCheckoutSummary() {
    const summary = document.getElementById("checkoutSummary");
    if (!summary) return;

    const cart = getCart();

    if (!cart.length) {
        summary.innerHTML = `<p class="text-muted mb-0">No items in cart. <a href="${SP_ROUTES.products}">Add products</a> to continue.</p>`;
        return;
    }

    let subtotal = 0;

    summary.innerHTML = cart
        .map((item) => {
            const product = PRODUCTS.find((entry) => entry.id === item.id);
            if (!product) return "";
            const line = product.price * item.qty;
            subtotal += line;
            return `<div class="d-flex justify-content-between mb-2"><span>${product.name} x ${item.qty}</span><strong>${formatPrice(line)}</strong></div>`;
        })
        .join("");

    const shipping = 99;
    const total = subtotal + shipping;

    summary.innerHTML += `
    <hr>
    <div class="d-flex justify-content-between"><span>Subtotal</span><strong>${formatPrice(subtotal)}</strong></div>
    <div class="d-flex justify-content-between"><span>Shipping</span><strong>${formatPrice(shipping)}</strong></div>
    <div class="d-flex justify-content-between fs-5 mt-2"><span>Total</span><strong>${formatPrice(total)}</strong></div>
  `;
}

function renderAdminProducts() {
    const tbody = document.getElementById("adminProductsTable");
    if (!tbody) return;

    tbody.innerHTML = PRODUCTS.slice(0, 8)
        .map((product, index) => {
            return `
        <tr>
          <td>#SP-${1000 + index}</td>
          <td>${product.name}</td>
          <td>${product.category}</td>
          <td>${formatPrice(product.price)}</td>
          <td><span class="badge text-bg-success-subtle text-success border border-success-subtle">Active</span></td>
        </tr>
      `;
        })
        .join("");
}

function showToast(message) {
    const toastContainer = document.getElementById("liveToastWrap");
    if (!toastContainer) return;

    const toastEl = document.createElement("div");
    toastEl.className = "toast align-items-center text-bg-primary border-0";
    toastEl.role = "alert";
    toastEl.innerHTML = `
    <div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  `;

    toastContainer.appendChild(toastEl);
    const toast = new bootstrap.Toast(toastEl, { delay: 1800 });
    toast.show();
    toastEl.addEventListener("hidden.bs.toast", () => toastEl.remove());
}

function bindEvents() {
    document.addEventListener("click", (event) => {
        const addBtn = event.target.closest("[data-add-to-cart]");
        if (addBtn) {
            addToCart(Number(addBtn.dataset.addToCart));
        }

        const removeBtn = event.target.closest("[data-remove]");
        if (removeBtn) {
            removeFromCart(Number(removeBtn.dataset.remove));
        }

        const qtyBtn = event.target.closest("[data-qty]");
        if (qtyBtn) {
            const id = Number(qtyBtn.dataset.id);
            const delta = qtyBtn.dataset.qty === "plus" ? 1 : -1;
            updateQty(id, delta);
        }

        const placeOrderBtn = event.target.closest("#placeOrderBtn");
        if (placeOrderBtn) {
            event.preventDefault();
            showToast("Order placed successfully (demo)");
            localStorage.removeItem(CART_KEY);
            updateCartCount();
            setTimeout(() => {
                window.location.href = SP_ROUTES.home;
            }, 800);
        }
    });

    ["filterCategory", "filterPrice", "sortPrice"].forEach((id) => {
        const el = document.getElementById(id);
        if (el) el.addEventListener("input", renderProductsPage);
        if (el) el.addEventListener("change", renderProductsPage);
    });
}

function initSmoothReveal() {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("revealed");
                }
            });
        },
        { threshold: 0.1 }
    );

    document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
}

document.addEventListener("DOMContentLoaded", () => {
    updateCartCount();
    bindEvents();
    renderTrending();
    renderProductsPage();
    renderProductDetails();
    renderCartPage();
    renderCheckoutSummary();
    renderAdminProducts();
    initSmoothReveal();
});
