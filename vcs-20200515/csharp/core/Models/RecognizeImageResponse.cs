// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class RecognizeImageResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeImageResponseData Data { get; set; }
        public class RecognizeImageResponseData : TeaModel {
            [NameInMap("BodyList")]
            [Validation(Required=true)]
            public List<RecognizeImageResponseDataBodyList> BodyList { get; set; }
            public class RecognizeImageResponseDataBodyList : TeaModel {
                    public string Feature { get; set; }
                    public string FileName { get; set; }
                    public string ImageBaseSixFour { get; set; }
                    public string LeftTopX { get; set; }
                    public string LeftTopY { get; set; }
                    public string LocalFeature { get; set; }
                    public string RespiratorColor { get; set; }
                    public string RightBottomX { get; set; }
                    public string RightBottomY { get; set; }
            }
            [NameInMap("FaceList")]
            [Validation(Required=true)]
            public List<RecognizeImageResponseDataFaceList> FaceList { get; set; }
            public class RecognizeImageResponseDataFaceList : TeaModel {
                    public string Feature { get; set; }
                    public string FileName { get; set; }
                    public string ImageBaseSixFour { get; set; }
                    public string LeftTopX { get; set; }
                    public string LeftTopY { get; set; }
                    public string LocalFeature { get; set; }
                    public string RespiratorColor { get; set; }
                    public string RightBottomX { get; set; }
                    public string RightBottomY { get; set; }
            }
        };

    }

}
