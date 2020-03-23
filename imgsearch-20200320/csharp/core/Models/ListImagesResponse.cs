// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch.Models
{
    public class ListImagesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListImagesResponseData Data { get; set; }
        public class ListImagesResponseData : TeaModel {
            [NameInMap("ScrollId")]
            [Validation(Required=true)]
            public string ScrollId { get; set; }
            [NameInMap("ImageList")]
            [Validation(Required=true)]
            public List<ListImagesResponseDataImageList> ImageList { get; set; }
            public class ListImagesResponseDataImageList : TeaModel {
                    public string DataId { get; set; }
                    public string ExtraData { get; set; }
                    public string ImageUrl { get; set; }
                    public string EntityId { get; set; }
            }
        };

    }

}
