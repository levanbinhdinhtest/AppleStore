const customers = [
    {
        path: "/customers",
        component: () => import("../layouts/customer.vue"),
        redirect: "/", // Chuyển hướng tới trang home
        
        children: [
            // Quản lý home
            {
                path: "home",
                alias:"/",
                name: "customers-home",
                component: () => import ("../pages/customers/home/index.vue")
            },

            //quan ly iphone
            {
                path: "iphone",
                name: "customers-iphone",
                component: () => import ("../pages/customers/iphone/index.vue")
            },

            //quan ly ipad
            {
                path: "ipad",
                name: "customers-ipad",
                component: () => import ("../pages/customers/ipad/index.vue")
            },

            //quan ly airpod
            {
                path: "airpod",
                name: "customers-airpod",
                component: () => import ("../pages/customers/airpod/index.vue")
            },

            //quan ly macbook
            {
                path: "mac",
                name: "customers-mac",
                component: () => import ("../pages/customers/mac/index.vue")
            },

            //quan ly watch
            {
                path: "watch",
                name: "customers-watch",
                component: () => import ("../pages/customers/watch/index.vue")
            },

            //quan ly contact
            {
                path: "contact",
                name: "customers-contact",
                component: () => import ("../pages/customers/contact/index.vue")
            },
            {
                path: "login",
                name: "customers-login",
                component:()=> import("../pages/customers/login-signup/login/index.vue")
            },
            {
                path: "signup",
                name: "customers-signup",
                component:()=> import("../pages/customers/login-signup/sign-up/index.vue")
            },

        ]
    },
 
];

export default customers;