// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ImageBlindPicWatermarkResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ImageBlindPicWatermarkResponseData Data { get; set; }
        public class ImageBlindPicWatermarkResponseData : TeaModel {
            [NameInMap("WatermarkImageURL")]
            [Validation(Required=true)]
            public string WatermarkImageURL { get; set; }
            [NameInMap("LogoURL")]
            [Validation(Required=true)]
            public string LogoURL { get; set; }
        };

    }

}
