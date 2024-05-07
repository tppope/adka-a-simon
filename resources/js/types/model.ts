export type User = {
    id: number;
    name: any;
    email: any;
    email_verified_at?: any;
    created_at?: any;
    updated_at?: any;
};
export type Guest = {
    id: number;
    name: any;
    surname: any;
    email?: any;
    phone?: any;
    is_lactose_free: any;
    is_gluten_free: any;
    is_vegetarian: any;
    is_vegan: any;
    is_child: any;
    notes?: any;
    created_at?: any;
    updated_at?: any;
    deleted_at?: any;
    is_participated: any;
    is_accommodation_needed: any;
};
