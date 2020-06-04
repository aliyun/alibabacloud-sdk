// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetCategoriesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SubTotal")]
        [Validation(Required=true)]
        public long SubTotal { get; set; }

        [NameInMap("SubCategories")]
        [Validation(Required=true)]
        public GetCategoriesResponseSubCategories SubCategories { get; set; }
        public class GetCategoriesResponseSubCategories : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=true)]
            public List<GetCategoriesResponseSubCategoriesCategory> Category { get; set; }
            public class GetCategoriesResponseSubCategoriesCategory : TeaModel {
                    public long CateId { get; set; }
                    public string CateName { get; set; }
                    public long Level { get; set; }
                    public long ParentId { get; set; }
                    public long SubTotal { get; set; }
                    public string Type { get; set; }
            }
        };

        [NameInMap("Category")]
        [Validation(Required=true)]
        public GetCategoriesResponseCategory Category { get; set; }
        public class GetCategoriesResponseCategory : TeaModel {
            [NameInMap("CateId")]
            [Validation(Required=true)]
            public long CateId { get; set; }
            [NameInMap("CateName")]
            [Validation(Required=true)]
            public string CateName { get; set; }
            [NameInMap("Level")]
            [Validation(Required=true)]
            public long Level { get; set; }
            [NameInMap("ParentId")]
            [Validation(Required=true)]
            public long ParentId { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
        };

    }

}
