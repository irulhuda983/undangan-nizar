import { createWebHistory, createWebHashHistory, createRouter } from "vue-router";

const routes = [
    {
        path: '/',
        name: 'Layout',
        component: () => import('@/partials/Layout.vue'),
        redirect: '/',
        children : [
            {
                path: '/',
                name: 'home',
                component: () => import('@/pages/Home.vue'),
                meta: { title: 'Home', auth: true, menu: 'home', bread: 'Home' },
            },
            {
                path: '/invite',
                name: 'invite',
                component: () => import('@/pages/Invite.vue'),
                meta: { title: 'Invite', auth: true, menu: 'invite', bread: 'Invite' },
            },
            {
                path: '/templates',
                name: 'templates',
                component: () => import('@/pages/Templates.vue'),
                meta: { title: 'Templates', auth: true, menu: 'templates', bread: 'Templates' },
            }
        ]
    }
]

const router = createRouter({
    // history: createWebHistory(),
    history: createWebHashHistory(),
    routes,
});

export default router;