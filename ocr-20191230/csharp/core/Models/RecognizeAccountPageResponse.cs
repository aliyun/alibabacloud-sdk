// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class RecognizeAccountPageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeAccountPageResponseData Data { get; set; }
        public class RecognizeAccountPageResponseData : TeaModel {
            [NameInMap("Angle")]
            [Validation(Required=true)]
            public float? Angle { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("Gender")]
            [Validation(Required=true)]
            public string Gender { get; set; }
            [NameInMap("Relation")]
            [Validation(Required=true)]
            public string Relation { get; set; }
            [NameInMap("BirthPlace")]
            [Validation(Required=true)]
            public string BirthPlace { get; set; }
            [NameInMap("Nationality")]
            [Validation(Required=true)]
            public string Nationality { get; set; }
            [NameInMap("NativePlace")]
            [Validation(Required=true)]
            public string NativePlace { get; set; }
            [NameInMap("BirthDate")]
            [Validation(Required=true)]
            public string BirthDate { get; set; }
            [NameInMap("IDNumber")]
            [Validation(Required=true)]
            public string IDNumber { get; set; }
            [NameInMap("InvalidStampAreas")]
            [Validation(Required=true)]
            public List<RecognizeAccountPageResponseDataInvalidStampAreas> InvalidStampAreas { get; set; }
            public class RecognizeAccountPageResponseDataInvalidStampAreas : TeaModel {
                    public int? Left { get; set; }
                    public int? Top { get; set; }
                    public int? Height { get; set; }
                    public int? Width { get; set; }
            }
            [NameInMap("UndertakeStampAreas")]
            [Validation(Required=true)]
            public List<RecognizeAccountPageResponseDataUndertakeStampAreas> UndertakeStampAreas { get; set; }
            public class RecognizeAccountPageResponseDataUndertakeStampAreas : TeaModel {
                    public int? Left { get; set; }
                    public int? Top { get; set; }
                    public int? Height { get; set; }
                    public int? Width { get; set; }
            }
            [NameInMap("RegisterStampAreas")]
            [Validation(Required=true)]
            public List<RecognizeAccountPageResponseDataRegisterStampAreas> RegisterStampAreas { get; set; }
            public class RecognizeAccountPageResponseDataRegisterStampAreas : TeaModel {
                    public int? Left { get; set; }
                    public int? Top { get; set; }
                    public int? Height { get; set; }
                    public int? Width { get; set; }
            }
            [NameInMap("OtherStampAreas")]
            [Validation(Required=true)]
            public List<RecognizeAccountPageResponseDataOtherStampAreas> OtherStampAreas { get; set; }
            public class RecognizeAccountPageResponseDataOtherStampAreas : TeaModel {
                    public int? Left { get; set; }
                    public int? Top { get; set; }
                    public int? Height { get; set; }
                    public int? Width { get; set; }
            }
            [NameInMap("TitleArea")]
            [Validation(Required=true)]
            public RecognizeAccountPageResponseDataTitleArea TitleArea { get; set; }
            public class RecognizeAccountPageResponseDataTitleArea : TeaModel {
                [NameInMap("Left")]
                [Validation(Required=true)]
                public int? Left { get; set; }

                [NameInMap("Top")]
                [Validation(Required=true)]
                public int? Top { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
        };

    }

}
