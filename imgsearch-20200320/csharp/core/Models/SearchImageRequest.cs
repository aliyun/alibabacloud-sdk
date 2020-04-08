// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch20200320.Models
{
    public class SearchImageRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("ImageUrl")]
        [Validation(Required=true)]
        public string ImageUrl { get; set; }

        [NameInMap("Limit")]
        [Validation(Required=true)]
        public int? Limit { get; set; }

    }

}
