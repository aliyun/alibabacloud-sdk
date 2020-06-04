// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class AddCategoryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Category")]
        [Validation(Required=true)]
        public AddCategoryResponseCategory Category { get; set; }
        public class AddCategoryResponseCategory : TeaModel {
            [NameInMap("CateId")]
            [Validation(Required=true)]
            public long CateId { get; set; }
            [NameInMap("CateName")]
            [Validation(Required=true)]
            public string CateName { get; set; }
            [NameInMap("ParentId")]
            [Validation(Required=true)]
            public long ParentId { get; set; }
            [NameInMap("Level")]
            [Validation(Required=true)]
            public long Level { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
        };

    }

}
