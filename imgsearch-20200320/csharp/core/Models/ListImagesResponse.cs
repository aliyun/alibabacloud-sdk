// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imgsearch20200320.Models
{
    public class ListImagesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListImagesResponseData Data { get; set; }
        public class ListImagesResponseData : TeaModel {
            [NameInMap("Token")]
            [Validation(Required=true)]
            public string Token { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("ImageList")]
            [Validation(Required=true)]
            public List<ListImagesResponseDataImageList> ImageList { get; set; }
            public class ListImagesResponseDataImageList : TeaModel {
                    public string DataId { get; set; }
                    public string ExtraData { get; set; }
                    public string EntityId { get; set; }
                    public long UpdatedAt { get; set; }
                    public long CreatedAt { get; set; }
            }
        };

    }

}
