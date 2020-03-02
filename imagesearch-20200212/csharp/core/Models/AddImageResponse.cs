// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.ImageSearch.Models
{
    public class AddImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("PicInfo")]
        [Validation(Required=true)]
        public AddImageResponsePicInfo PicInfo { get; set; }
        public class AddImageResponsePicInfo : TeaModel {
            [NameInMap("CategoryId")]
            [Validation(Required=true)]
            public int? CategoryId { get; set; }
            [NameInMap("Region")]
            [Validation(Required=true)]
            public string Region { get; set; }
        };

    }

}
