export const BASE_URL = 'http://127.0.0.1:8000/api';

export const paginate = (items, currentPage, itemsPerPage) => {
    const start = (currentPage - 1) * itemsPerPage;
    return items.slice(start, start + itemsPerPage);
};