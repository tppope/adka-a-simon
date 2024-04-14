import {User} from "@/types/model";

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    app_name: string;
    auth: {
        user: User;
    };
    navigation: [
        {
            label: string;
            routeName: string;
        }
    ];
};
